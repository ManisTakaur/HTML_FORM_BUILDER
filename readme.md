## Introduction
This project's  goal is to make a simple form builder package, which will have only four types of input: (i) text, (ii)Checkbox, (iii)radio, (iv) dropdown. This package is able to pass style(s), value(s) and type to the helpers.




## Form Builder
### Installation
Require this package with composer.

```
    composer require barryvdh/laravel-debugbar --dev

```
#### Laravel 5.5+:
If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```
formBuilder\htmlFormBuilder\htmlFormBuilderServiceProvider::class,

```

##### Input tag:
We will be using this template as follows
```
@include('htmlFormBuilder::input', ['data'=>$dataUsername])
```
Where data is a key value array in the following structure:
```
$dataUsername = [
    'ids' => ['username'],
    'classes' => ['form-control'],
    'type' => 'text',
    'name' => 'username',
    'values' => [
        'prev_value' => 'xyz'
    ],
    'required' => true
];
```
##### Select tag:
We will be using this template as follows
```
@include(“'htmlFormBuilder::select”, [“data” => $data])
```
Where data is a key value array in the following structure:
```
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
```
In the case of the active value being “null”, a default value has to be generated and put at the top of the options list, otherwise the “active” value is to be placed at the top of the options list.

##### Radio
We will be using this template as follows
```
@include('htmlFormBuilder::radio', ['data'=>$dataRadio])
```
Where data is a key value array in the following structure:
```
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
```
In the case of the active value not being “null”, the active value has to be selected.

##### Checkbox
We will be using this template as follows
```
@include('htmlFormBuilder::checkbox', ['data'=>$dataCheckBox])
```
Where data is a key value array in the following structure:
```
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
```
