<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/boostrap.min.css">
    <style>
        .alert-error{
            color: red;
        }
        .text-danger{
            color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <div class="col-md-12 col-sm-12"><h2>Form</h2></div>
            @if ($errors->any())
                <div class="col-md-12 col-sm-12 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="col-md-4 col-sm-4 alert-error">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="col-md-12 col-sm-12 alert alert-success"><h2>{{session()->get('success')}}</h2></div>
            @endif
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br/>
            <form method="post" action="/form">
                @csrf
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Name *</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="name" class="form-control ">
                        @error('name')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Address *</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="address" class="form-control ">
                        @error('address')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Description *</label>
                    <div class="col-md-6 col-sm-6 ">
                        <label>
                            <textarea style="width: 100%" name="description" rows="4" cols="50"></textarea>
                        </label>
                        @error('description')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Price *</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="number" name="price" class="form-control ">
                        @error('price')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group item">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Select</label>
                    <div class="col-md-6 col-sm-6 col-form-label">
                        <select name="status" class="form-control">
                            <option value="1">Option one</option>
                            <option value="2">Option two</option>
                            <option value="3">Option three</option>
                        </select>
                    </div>
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Thumbnail *</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="thumbnail" class="form-control ">
                        @error('thumbnail')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Detail *</label>
                    <div class="col-md-6 col-sm-6 ">
                        <label>
                            <textarea style="width: 100%" name="detail" rows="4" cols="50"></textarea>
                        </label>
                        @error('detail')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>
