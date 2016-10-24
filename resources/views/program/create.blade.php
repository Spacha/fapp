@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
                <div class="panel-heading">Create new program</div>

                <div class="panel-body">
					<form>
						<div class="form-group col-sm-4">
							<label for="program-name">Program name</label>
							<input type="text" class="form-control" id="program-name" placeholder="Name your program to recognize it!">
						</div>
						<button type="submit" class="btn btn-primary">Create</button>
					</form>
                </div>
            </div>
</div>
@endsection
