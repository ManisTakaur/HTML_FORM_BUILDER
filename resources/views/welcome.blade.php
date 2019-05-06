<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>HTML Form Builder</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        @include('style')
        <div class="text-center">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <div class="fadeIn first">
                        <img src="https://techynaf.com/img/mobile-logo.png" id="icon" alt="User Icon" />
                    </div>
                    <br><br>
                    @php
                        $dataUsername = [
                            'ids' => ['username'],
                            'classes' => ['form-control'],
                            'type' => 'text',
                            'name' => 'username',
                            'values' => [
                                'prev_value' => 'techynaf'
                            ],
                            'required' => true
                        ];

                        $dataPassword = [
                            'ids' => ['password'],
                            'classes' => ['form-control'],
                            'type' => 'password',
                            'name' => 'login',
                            'values' => [
                                'prev_value' => 'techynaf'
                            ],
                            'required' => true
                        ];
                    @endphp
                    <form>
                        @include('htmlFormBuilder::input', ['data'=>$dataUsername])
                        @include('htmlFormBuilder::input', ['data'=>$dataPassword])
                        <input type="submit" class="fadeIn fourth" value="Log In">
                    </form>
                    <div id="formFooter">
                        <a class="underlineHover" href="#">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
