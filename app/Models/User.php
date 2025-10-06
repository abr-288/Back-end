<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Fortify\RecoveryCode;

class User extends Authenticatable
{
    use HasApiTokens;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Vérifie si l'utilisateur a activé la 2FA
     *
     * @return bool
     */
    public function hasEnabledTwoFactorAuthentication()
    {
        return ! is_null($this->two_factor_secret);
    }

    /**
     * Génère de nouveaux codes de récupération
     *
     * @return array
     */
    public function generateTwoFactorRecoveryCodes()
    {
        $this->forceFill([
            'two_factor_recovery_codes' => encrypt(json_encode(collect(
                array_map(function () {
                    return RecoveryCode::generate();
                }, range(1, 8))
            )->toArray())),
        ])->save();

        return json_decode(decrypt($this->two_factor_recovery_codes));
    }

    /**
     * Récupère les codes de récupération
     *
     * @return array
     */
    public function recoveryCodes()
    {
        if (is_null($this->two_factor_recovery_codes)) {
            return [];
        }

        return json_decode(decrypt($this->two_factor_recovery_codes));
    }

    /**
     * Vérifie si un code de récupération est valide
     *
     * @param  string  $code
     * @return bool
     */
    public function isValidRecoveryCode($code)
    {
        return in_array(
            $code,
            $this->recoveryCodes()
        );
    }

    /**
     * Utilise un code de récupération
     *
     * @param  string  $code
     * @return void
     */
    public function replaceRecoveryCode($code)
    {
        $this->forceFill([
            'two_factor_recovery_codes' => encrypt(str_replace(
                $code,
                RecoveryCode::generate(),
                decrypt($this->two_factor_recovery_codes)
            )),
        ])->save();
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
