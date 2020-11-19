<script type="text/javascript">


    @if(isset($errors))
        @foreach($errors as $error)
            @foreach($error as $message)

                iziToast.show({
                    message: '{{ $message }}',
                    messageColor: '',
                    backgroundColor: '',
                    theme: 'light', // dark
                    color: 'red', // blue, red, green, yellow
                    position: 'bottomRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
                    target: '',
                    targetFirst: true,
                    timeout: 10000,
                    drag: true,
                    buttons: {},
                    inputs: {},
                });

            @endforeach
        @endforeach
    @endif



    @if(session()->has('success'))
        iziToast.show({
            message: '{{ session()->get('success') }}',
            messageColor: '',
            backgroundColor: '',
            theme: 'light', // dark
            color: 'green', // blue, red, green, yellow
            position: 'bottomRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
            target: '',
            targetFirst: true,
            timeout: 10000,
            drag: true,
            buttons: {},
            inputs: {},
        });
    @endif



</script>
