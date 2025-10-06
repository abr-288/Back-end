<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;

class TestPdfController extends Controller
{
    public function test(Payment $payment)
    {
        $data = [
            'payment' => $payment,
            'date' => now()->format('d/m/Y'),
            'reference' => 'RC-' . strtoupper(uniqid()),
        ];
        
        $pdf = Pdf::loadView('pdf.receipt', $data);
        return $pdf->download('test-receipt.pdf');
    }
}
