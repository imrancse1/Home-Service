<div>
	
     <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Edit Service</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Edit Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-8 col-md-offset-2 profile1">
                            	<div class="panel panel-default">
                            		<div class="panel panel-heading">
                            			<div class="row">
                            				<div class="col-md-6">
                            					Edit Service 
                            				</div>
                            				<div class="col-md-6">
                            					<a href="{{route('admin.all_services')}}" class="btn btn-info pull-right">All Services</a>
                            				</div>
                            			</div>
                            		</div>
                            		<div class="panel-body">
                                        @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                            			<form class="form-horizontal" wire:submit.prevent="updateService">
                                            @csrf
                            			<div class="form-group row">
                            				<label for="name" class="control-label col-sm-3">Name: </label>
                            				<div class="col-sm-9">
                            					<input type="type" name="name" class="form-control" wire:model="name" wire:keyup="generateSlug" />
                                                @error('name') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="slug" class="control-label col-sm-3">Slug:</label>
                            				<div class="col-sm-9">
                            					<input type="type" name="slug" class="form-control" wire:model="slug" />
                                                @error('slug') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="slug" class="control-label col-sm-3">Tagline:</label>
                            				<div class="col-sm-9">
                            					<input type="type" name="tagline" class="form-control" wire:model="tagline" />
                                                @error('tagline') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="slug" class="control-label col-sm-3">Service Category:</label>
                            				<div class="col-sm-9">
                            					<select class="form-control" wire:model="service_category_id">
                            						<option value="">
                            							Select Service Category
                            						</option>
                            						@foreach($categories as $category)
                            						<option value="{{$category->id}}">{{$category->name}}</option>
                            						@endforeach
                            					</select>
                                                @error('service_category_id') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="price" class="control-label col-sm-3">Price:</label>
                            				<div class="col-sm-9">
                            					<input type="type" name="price" class="form-control" wire:model="price" />
                                                @error('price') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="discount" class="control-label col-sm-3">Discount:</label>
                            				<div class="col-sm-9">
                            					<input type="type" name="discount" class="form-control" wire:model="discount" />
                                                @error('discount') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="discount_type" class="control-label col-sm-3">Discount Type:</label>
                            				<div class="col-sm-9">
                            					<select class="form-control" wire:model="discount_type" >
                            						<option value="">Select Service Category</option>
                            						<option value="fixed">Fixed</option>
                            						<option value="percent">Percent</option>
                            					</select>
                                                @error('discount_type') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="discription" class="control-label col-sm-3">Description:</label>
                            				<div class="col-sm-9">
                            					<textarea class="form-control" wire:model="discription" ></textarea>
                                                @error('discription') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="inclusion" class="control-label col-sm-3">Inclusion:</label>
                            				<div class="col-sm-9">
                            					<textarea class="form-control" wire:model="inclusion"></textarea>
                                                @error('inclusion') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="exclusion" class="control-label col-sm-3">Exclusion:</label>
                            				<div class="col-sm-9">
                            					<textarea class="form-control" wire:model="exclusion"></textarea>
                                                @error('exclusion') <p class="text-danger">{{$message}}</p>
                                                @enderror
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="newthumbnail" class="control-label col-sm-3">Thumbnail:</label>
                            				<div class="col-sm-9">
                            					<input type="file" name="newthumbnail" class="form-control-file" wire:model="newthumbnail" />
                                                @error('newthumbnail') <p class="text-danger">{{$message}}</p>
                                                @enderror
                                                @if($newthumbnail)
                                                <img src="{{$newthumbnail->temporaryUrl()}}" width="60" />
                                                @else
                                                <img src="{{asset('images/services/thumbnails')}}/{{$thumbnail}}" width="60" />
                                                @endif
                            				</div>
                            			</div>

                            			<div class="form-group row">
                            				<label for="newimage" class="control-label col-sm-3">Image:</label>
                            				<div class="col-sm-9">
                            					<input type="file" name="newimage" class="form-control-file" wire:model="newimage" />
                                                @error('newimage') <p class="text-danger">{{$message}}</p>
                                                @enderror
                                                @if($newimage)
                                                <img src="{{$newimage->temporaryUrl()}}" width="60" />
                                                @else
                                                <img src="{{asset('images/services')}}/{{$image}}" width="60" />
                                                @endif
                            				</div>
                            			</div>

                            			<button type="submit" class="btn btn-success pull-right">Update Service</button>
                            			</form>
                            		</div>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>                   
</div>
