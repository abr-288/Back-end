<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Vérifie si un index existe sur une table (compatible SQLite)
     */
    protected function hasIndex($table, $indexName)
    {
        $connection = Schema::getConnection();
        $databaseName = $connection->getDatabaseName();
        
        if ($connection->getDriverName() === 'sqlite') {
            $indexes = $connection->select(
                "SELECT name FROM sqlite_master 
                WHERE type = 'index' AND tbl_name = ? AND sql LIKE ?", 
                [$table, "%{$indexName}%"]
            );
            return count($indexes) > 0;
        }
        
        // Pour les autres bases de données
        try {
            $indexes = $connection->getDoctrineSchemaManager()->listTableIndexes($table);
            return array_key_exists($indexName, $indexes);
        } catch (\Exception $e) {
            // En cas d'erreur, on suppose que l'index n'existe pas
            return false;
        }
    }

    public function up(): void
    {
        // Index pour la table users
        Schema::table('users', function (Blueprint $table) {
            if (!$this->hasIndex('users', 'users_email_index')) {
                $table->index('email');
            }
            if (!$this->hasIndex('users', 'users_created_at_index')) {
                $table->index('created_at');
            }
        });

        // Index pour la table reservations
        if (Schema::hasTable('reservations')) {
            Schema::table('reservations', function (Blueprint $table) {
                if (!$this->hasIndex('reservations', 'reservations_user_id_index')) {
                    $table->index('user_id');
                }
                if (!$this->hasIndex('reservations', 'reservations_status_index')) {
                    $table->index('status');
                }
                if (!$this->hasIndex('reservations', 'reservations_created_at_index')) {
                    $table->index('created_at');
                }
            });
        }

        // Index pour la table payments
        if (Schema::hasTable('payments')) {
            Schema::table('payments', function (Blueprint $table) {
                if (!$this->hasIndex('payments', 'payments_reservation_id_index')) {
                    $table->index('reservation_id');
                }
                if (!$this->hasIndex('payments', 'payments_status_index')) {
                    $table->index('status');
                }
                if (!$this->hasIndex('payments', 'payments_created_at_index')) {
                    $table->index('created_at');
                }
            });
        }

        // Index pour la table hotels
        if (Schema::hasTable('hotels')) {
            Schema::table('hotels', function (Blueprint $table) {
                if (!$this->hasIndex('hotels', 'hotels_name_index')) {
                    $table->index('name');
                }
                if (!$this->hasIndex('hotels', 'hotels_location_index')) {
                    $table->index('location');
                }
                if (!$this->hasIndex('hotels', 'hotels_is_active_index')) {
                    $table->index('is_active');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Suppression des index de la table users
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['email']);
            $table->dropIndex(['created_at']);
        });

        // Suppression des index de la table reservations
        if (Schema::hasTable('reservations')) {
            Schema::table('reservations', function (Blueprint $table) {
                $table->dropIndex(['user_id']);
                $table->dropIndex(['status']);
                $table->dropIndex(['created_at']);
            });
        }

        // Suppression des index de la table payments
        if (Schema::hasTable('payments')) {
            Schema::table('payments', function (Blueprint $table) {
                $table->dropIndex(['reservation_id']);
                $table->dropIndex(['status']);
                $table->dropIndex(['created_at']);
            });
        }

        // Suppression des index de la table hotels
        if (Schema::hasTable('hotels')) {
            Schema::table('hotels', function (Blueprint $table) {
                $table->dropIndex(['name']);
                $table->dropIndex(['location']);
                $table->dropIndex(['is_active']);
            });
        }
    }
};
