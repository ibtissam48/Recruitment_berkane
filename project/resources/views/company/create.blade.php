@extends('layouts.account')

@section('content')
  <div class="account-layout border">
    <div class="account-hdr bg-primary text-white border">
      Create Company
    </div>
    <div class="account-bdy p-3">
     <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <div class="py-3">
            <p>Company name</p>
          </div>
          <input type="text" placeholder="Company name" class="form-control @error('password') is-invalid @enderror" name="title" value="{{ old('title') }}" required>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="">Line of business</label>
          <select class="form-control" name="category" value="{{ old('category') }}" required>
            @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="pb-3">
          <div class="py-3">
            <p>Commercial register</p>
          </div>
          <div class="custom-file">
            <input type="text" placeholder="commercial_register" class="form-control @error('password') is-invalid @enderror" name="commercial_register" value="{{ old('commercial_register') }}" required>
            
            @error('commercial_register')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <div class="py-3">
            <p>Workforce number</p>
          </div>
   
          <select name="workforce_number" class="form-control"  required>
                    <option>select an option</option>
                    <option>from 1 to 49</option>
                    <option>from 50 to 149 </option>
                    <option>from 150 to 249</option>
                    <option>from 250 to 499</option>
                    <option>from 500 to 749</option>
                    <option>from 750 to 999 </option>
                    <option>more than 1000 </option>
                  </select>
            @error('workfoce_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="pb-3" >
          <div class="py-3">
            <p>Phone number</p>
          </div>
          <div class="custom-file" >
            <input type="tel" placeholder="phone number" >
            @error('phone number')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="">city</label>
          <select class="form-control" name="ville" value="{{ old('ville') }}" required>
            @foreach($villes as $ville)
          <option value="{{$ville->id}}">{{$ville->ville_name}}</option>
            @endforeach
          </select>
        </div>
        
                 
        <div class="line-divider"></div>
        <div class="mt-3">
          <button type="submit" class="btn primary-btn">Create company</button>
          <a href="{{route('account.authorSection')}}" class="btn primary-outline-btn">Cancel</a>
        </div>
      </form>
    </div>
  </div>
@endSection
