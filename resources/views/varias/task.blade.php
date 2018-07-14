@extends('layouts.app')
@section('title',"Notas ")
@section('content')
<div class="container">
  <tasks-list></tasks-list>
</div>
@endsection
@section('style')
  <style>
    .active, .myLi:hover {
      background-color: #505050;
        border: none;
        outline: none;
      /*color: rgb(251, 251, 251);  color de los botones*/
    }
  </style>
@endsection
@section('script')
  <script>
      // Add active class to the current UL (highlight it)
      var header = document.getElementById("myUl");
      var btns = header.getElementsByClassName("myLi");
      for (var i = 0; i < miLis.length; i++) {
          btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
          });
      }
  </script>

@endsection
