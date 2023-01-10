@include("backend/layouts/header")
<!-- main header @s -->
@include("backend.layouts.topbar")
<!-- main header @e -->
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            @yield("content")
        </div>
    </div>
</div>
<!-- content @e -->
<!-- footer @s -->
@include("backend/layouts/footer")