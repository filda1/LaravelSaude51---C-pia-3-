@extends('user/layouts/app')

@section('main-content')


 <!-- Portfolio Section -->
 <section class="page-section portfolio" id="portfolio">
    <div class="container">
<div style="width:800px; margin:0 auto;">
<br><br>
<h3>Aderir ao cartao</h3>
<br>
<div class="box-body">
 <!-- 
      <form role="form" action="{{ route('aderir.store') }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
<br>
      
        <br>
        <br>
        <input type="text"  id="name" name="name" placeholder="Nome" />

        <br>
        <br>
        <input type="text"  id="email" name="email" placeholder="E-mail" />

        
        <br>
        <br>
        <input type="text"   id="telefone" name="telefone" placeholder="Telefone" />
    
        <br>
        <br>
        <textarea  id="menssagem" name="menssagem" rows="10" cols="30"  placeholder="Menssagem">
        </textarea>
    
        <br>
        <br>

        <div class="">
              <input type="submit" class="btn btn-primary">
              <a href='{{ route('aderir.index') }}' class="btn btn-warning">Back</a>


            </div>
         </div>


</form> -->

<form enctype="multipart/form-data" novalidate="novalidate" method="POST" action=" {{ url('mail2/send2') }}">
          {{ csrf_field() }}
<br>
      
        <br>
        <br>
        <input type="text"  id="name" name="name" placeholder="Nome" />

        <br>
        <br>
        <input type="text"  id="email" name="email" placeholder="E-mail" />

        
        <br>
        <br>
        <input type="text"   id="phone" name="phone" placeholder="Telefone" />
    
        <br>
        <br>
        <textarea  id="message" name="message" rows="10" cols="30"  placeholder="Menssagem">
        </textarea>
    
        <br>
        <br>

        <div class="">
              <input type="submit" class="btn btn-primary">
              <a>Back</a>


            </div>
         </div>


</form>

 <br>
 <br>
 <br>
 <br>
 <br>
</div>
   
  </section>
@endsection