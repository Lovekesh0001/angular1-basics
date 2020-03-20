Angular makes use of observables as an interface to handle a variety of common asynchronous operations. For example:

You can define custom events that send observable output data from a child to a parent component.
The HTTP module uses observables to handle AJAX requests and responses.
The Router and Forms modules use observables to listen for and respond to user-input events.

=======================================================================================================================================
HTTP
Angular’s HttpClient returns observables from HTTP method calls. For instance, http.get(‘/api’) returns an observable. This provides several advantages over promise-based HTTP APIs:

Observables do not mutate the server response (as can occur through chained .then() calls on promises). Instead, you can use a series of operators to transform values as needed.
HTTP requests are cancellable through the unsubscribe() method.
Requests can be configured to get progress event updates.
Failed requests can be retried easily.

=======================================================================================================================================
Async pipe
The AsyncPipe subscribes to an observable or promise and returns the latest value it has emitted. When a new value is emitted, the pipe marks the component to be checked for changes.

=======================================================================================================================================
The RxJS library
Reactive programming is an asynchronous programming paradigm concerned with data streams and the propagation of change (Wikipedia). RxJS (Reactive Extensions for JavaScript) is a library for reactive programming using observables that makes it easier to compose asynchronous or callback-based code. See (RxJS Docs).

RxJS provides an implementation of the Observable type, which is needed until the type becomes part of the language and until browsers support it. The library also provides utility functions for creating and working with observables. These utility functions can be used for:

Converting existing code for async operations into observables
Iterating through the values in a stream
Mapping values to different types
Filtering streams
Composing multiple streams

=======================================================================================================================================
Naming conventions for observables
Because Angular applications are mostly written in TypeScript, you will typically know when a variable is an observable. Although the Angular framework does not enforce a naming convention for observables, you will often see observables named with a trailing “$” sign.

This can be useful when scanning through code and looking for observable values. Also, if you want a property to store the most recent value from an observable, it can be convenient to simply use the same name with or without the “$”.