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
        <div>
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <div class="fadeIn first">
                        <img src="https://techynaf.com/img/mobile-logo.png" id="icon" alt="User Icon" />
                    </div>
                    <br>
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

                        $dataSelect = [
                            'ids' => ['select'],
                            'classes' => ['custom-select mr-sm-10'],
                            'name' => 'select',
                            'type' => 'select',
                            'values' => [
                                'value1' => 'front-end',
                                'value2' => 'back-end',
                                'value3' => 'DBAdmin'
                            ],
                            'active' => 'value2',
                            'required' => true
                        ];

                        $dataRadio = [
                            'ids' => ['radio'],
                            'classes' => [''],
                            'name' => 'radio',
                            'values' => [
                                'value1' => '10:00 AM - 06:00PM',
                                'value2' => '11:00 AM - 07:00PM'
                            ],
                            'active' => 'value2',
                            'required' => true
                        ];

                        $dataCheckBox = [
                            'ids' => ['checkbox'],
                            'classes' => [''],
                            'name' => 'checkbox',
                            'values' => [
                                'value1' => '06-05-2019',
                                'value2' => '07-05-2019'
                            ],
                            'required' => true
                        ];
                    @endphp
                    <form>
                        <div>Enter UserName</div>
                        @include('htmlFormBuilder::input', ['data'=>$dataUsername])
                        <div>Enter Password</div>
                        @include('htmlFormBuilder::input', ['data'=>$dataPassword])
                        <div>Select Designation</div>
                        <div class="select2">
                            @include('htmlFormBuilder::select', ['data'=>$dataSelect])
                        </div>
                        <div>Select Time-Slot</div>
                        <div class="select2">
                            @include('htmlFormBuilder::radio', ['data'=>$dataRadio])
                        </div>
                        <div>Select Date</div>
                        <div class="select2">
                            @include('htmlFormBuilder::checkbox', ['data'=>$dataCheckBox])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
