# Practice Set 1
<?php

/**
 * Calculate the total price of items in a shopping cart.
 *
 * @param array $items Array of items where each item is an associative array with 'name' and 'price' keys.
 * @return float The total price of all items.
 */
function calculateTotalPrice(array $items): float {
    $total = 0.0;
    
    // Iterate through each item and sum the price
    foreach ($items as $item) {
        $total += $item['price'];
    }

    return $total;
}

/**
 * Manipulate a string by removing commas and converting it to lowercase.
 *
 * @param string $input The string to be manipulated.
 * @return string The modified string.
 */
function manipulateString(string $input): string {
    $input = str_replace(',', '', $input); // Remove commas
    return strtolower($input); // Convert to lowercase
}

/**
 * Check if a number is even or odd and return a corresponding message.
 *
 * @param int $number The number to be checked.
 * @return string Message indicating whether the number is even or odd.
 */
function checkEvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}

// Example usage:

// 1. Calculate the total price of items in the shopping cart
$items = [
    ['name' => 'Widget A', 'price' => 101],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 201]
];
$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice . "\n";

// 2. Manipulate a string
$string = "This is a poorly written program with little structure and readability.";
$modifiedString = manipulateString($string);
echo "Modified string: " . $modifiedString . "\n";

// 3. Check if a number is even or odd
$number = 42;
$evenOddMessage = checkEvenOrOdd($number);
echo $evenOddMessage . "\n";

?>
output
Total price: $317
Modified string: this is a poorly written program with little structure and readability.
The number 42 is even.
