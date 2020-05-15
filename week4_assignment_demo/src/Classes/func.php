<?php

function displaySalesAsTable($sales)
{
    $data = '<table border="1">';
        $data .= '<tr>';
            $data .= '<th>Item</th>';
            $data .= '<th>Price</th>';
            $data .= '<th>Quantity</th>';
            $data .= '<th>Method</th>';
            $data .= '<th>Total</th>';
        $data .= '</tr>';

        /** @var \Paragon\Models\Sale $sale */
        foreach ($sales as $sale) {
            $product = $sale->getProduct();
            $data .= '<tr>';
                $data .= '<td>' . $product->getName() . '</td>';
                $data .= '<td>' . $product->getUniPrice() . '</td>';
                $data .= '<td>' . $product->getQuantity() . '</td>';
                $data .= '<td>' . $sale->getPaymentMethod() . '</td>';
                $data .= '<td>' . $sale->getTotal() . '</td>';
            $data .= '</tr>';
        }

    $data .= '</table>';

    return $data;
}

function solve1($sales)
{
    $total = 0;
    /** @var \Paragon\Models\Sale $sale */
    foreach ($sales as $sale) {
        if (strtolower($sale->getPaymentMethod()) === 'aba') {
            $total += $sale->getTotal();
        }
    }

    return $total;
}

function solve2($sales)
{
    $total = 0;
    /** @var \Paragon\Models\Sale $sale */
    foreach ($sales as $sale) {
        if (strtolower($sale->getPaymentMethod()) !== 'aba') {
            $total += $sale->getTotal();
        }
    }

    return $total;
}