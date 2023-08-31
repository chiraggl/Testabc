namespace Foo\Bar;

try {
    doSomething();
} catch (Exception $e) { // Noncompliant - Exception will never be caught because the class Exception does not exist in the namespace
    echo $e->message;
}
