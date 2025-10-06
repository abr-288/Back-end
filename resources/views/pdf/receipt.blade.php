<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Reçu de paiement #{{ $payment->transaction_id }}</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 12px;
            color: #333;
            line-height: 1.5;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 20px;
        }
        .logo {
            max-width: 200px;
            margin-bottom: 10px;
        }
        .receipt-title {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
            color: #2c3e50;
        }
        .receipt-number {
            font-size: 16px;
            color: #7f8c8d;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
        .row {
            display: flex;
            margin-bottom: 8px;
        }
        .label {
            font-weight: bold;
            width: 40%;
        }
        .value {
            width: 60%;
        }
        .amount-due {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #eee;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 10px;
            color: #7f8c8d;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
        .status {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 3px;
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
        }
        .status-completed {
            background-color: #d4edda;
            color: #155724;
        }
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        .status-refunded {
            background-color: #cce5ff;
            color: #004085;
        }
        .status-failed {
            background-color: #f8d7da;
            color: #721c24;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="receipt-title">REÇU DE PAIEMENT</div>
            <div class="receipt-number">Référence: {{ $payment->transaction_id }}</div>
            <div class="receipt-number">Reçu #{{ $reference }}</div>
            <div>Date: {{ $date }}</div>
        </div>

        <div class="section">
            <div class="section-title">Informations de paiement</div>
            <div class="row">
                <div class="label">Statut:</div>
                <div class="value">
                    <span class="status status-{{ $payment->status }}">
                        {{ $payment->getStatuses()[$payment->status] ?? $payment->status }}
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="label">Date du paiement:</div>
                <div class="value">{{ $payment->paid_at ? $payment->paid_at->format('d/m/Y H:i') : 'N/A' }}</div>
            </div>
            <div class="row">
                <div class="label">Méthode de paiement:</div>
                <div class="value">{{ $payment->getPaymentMethodLabelAttribute() }}</div>
            </div>
            <div class="row">
                <div class="label">Montant payé:</div>
                <div class="value">{{ number_format($payment->amount, 0, ',', ' ') }} FCFA</div>
            </div>
            @if($payment->isRefunded() || $payment->isPartiallyRefunded())
            <div class="row">
                <div class="label">Montant remboursé:</div>
                <div class="value">{{ number_format($payment->getRefundedAmount(), 0, ',', ' ') }} FCFA</div>
            </div>
            @endif
        </div>

        <div class="section">
            <div class="section-title">Détails de la réservation</div>
            <div class="row">
                <div class="label">Référence:</div>
                <div class="value">#{{ $payment->reservation->id }}</div>
            </div>
            <div class="row">
                <div class="label">Date de début:</div>
                <div class="value">{{ $payment->reservation->start_date->format('d/m/Y') }}</div>
            </div>
            <div class="row">
                <div class="label">Date de fin:</div>
                <div class="value">{{ $payment->reservation->end_date->format('d/m/Y') }}</div>
            </div>
            <div class="row">
                <div class="label">Statut de la réservation:</div>
                <div class="value">{{ $payment->reservation->formatted_status }}</div>
            </div>
        </div>

        @if(!empty($payment->payment_details))
        <div class="section">
            <div class="section-title">Détails supplémentaires</div>
            <table>
                <tbody>
                    @foreach($payment->payment_details as $key => $value)
                        @if(!in_array($key, ['refunds', 'last_refund']) && !is_array($value))
                        <tr>
                            <td style="width: 30%; font-weight: bold;">{{ ucfirst(str_replace('_', ' ', $key)) }}:</td>
                            <td>{{ is_string($value) ? $value : json_encode($value) }}</td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif

        <div class="footer">
            <p>Ceci est un reçu électronique valide. Aucune signature n'est requise.</p>
            <p>Merci pour votre confiance !</p>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
