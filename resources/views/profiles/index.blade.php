@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://yt3.ggpht.com/a/AGF-l7_sGUrG_alh-mdTIDmdcaw1GanuPL2PxVajjQ=s900-c-k-c0xffffffff-no-rj-mo" alt="Une image" style="height:168px; width:168px;" class="rounded-circle">
        </div>

        <div class="col-9 pt-5"> 
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>28k</strong> followers</div>
                <div class="pr-5"><strong>500</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-cdt1-1.cdninstagram.com/vp/81f224fd80c2918b5678ed011405afbf/5E124344/t51.2885-15/e35/c2.0.745.745a/s320x320/67980021_2202052933427189_6407359992029428126_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com" class="w-100" alt="Une image de pc">
        </div>

        <div class="col-4">
            <img src="https://scontent-cdt1-1.cdninstagram.com/vp/81f224fd80c2918b5678ed011405afbf/5E124344/t51.2885-15/e35/c2.0.745.745a/s320x320/67980021_2202052933427189_6407359992029428126_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com" class="w-100" alt="Une image de pc">
        </div>

        <div class="col-4">
            <img src="https://scontent-cdt1-1.cdninstagram.com/vp/81f224fd80c2918b5678ed011405afbf/5E124344/t51.2885-15/e35/c2.0.745.745a/s320x320/67980021_2202052933427189_6407359992029428126_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com" class="w-100" alt="Une image de pc">
        </div>
    </div>
</div>
@endsection
