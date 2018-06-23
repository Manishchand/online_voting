<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>

     <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi architecto deleniti eius odio odit quas quisquam quod repellendus sapiente. Autem deserunt fugiat ipsum iusto molestias odio provident repudiandae voluptates!
    </p>
    <hr>
    <!-- a link to a named route, that displays the modal form -->
    <a href="{{ route('modal') }}" class="btn btn-default show_modal_form">New post</a>



    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ asset('vendor/leantony/modal/modal.min.js') }}"></script>
    <!-- initialize the modal js plugin -->
    <script>
        leantony.modal({});
    </script>

    <!-- Add the modal container to your layout. This is where the html for the modal form will be injected by the javascript ajax call. Put it ideally just before the footer -->
<p>jghjkhgjhgjh</p>
    @include('modal::container')
    <footer>
        some text here
    </footer>
    </body>
</html>