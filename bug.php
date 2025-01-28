In PHP, a common yet subtle error arises when dealing with references and objects.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

function modifyObject(MyClass &$obj) {
    $obj = new MyClass(); // Assign a new object to the reference
    $obj->value = 10;
}

$myObject = new MyClass();
modifyObject($myObject);
echo $myObject->value; // Output: 0 (Unexpected!)
```

The expectation might be that `$myObject->value` would be 10. However, within the `modifyObject` function, reassigning `$obj` to a new `MyClass` instance doesn't modify the original object reference passed.  It changes what the reference *points to* inside the function's scope only. The original `$myObject` remains unchanged.