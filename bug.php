```php
function processData(array $data): array {
  // ... some code to process the data ...
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = self::processData($value); // Recursive call
    }
  }
  return $data;
}

// Example usage
$input = [1, 2, [3, 4, [5, 6]]];
$output = processData($input);
print_r($output);
```