```php
function processData(array $data): array {
  if (empty($data) || !in_array(true, array_map('is_array', $data)) ) {
      return $data; // Base case: return if the array is empty or if contains only scalar values
  }

    foreach ($data as $key => $value) {
      if (is_array($value)) {
        $data[$key] = processData($value); // Recursive call
      }
    }
    return $data;
}

// Example usage
$input = [1, 2, [3, 4, [5, 6]]];
$output = processData($input);
print_r($output);
```