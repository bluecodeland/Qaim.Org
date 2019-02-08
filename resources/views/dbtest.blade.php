<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="border:1px;">
        <tr>
            <th>id</th>
            <th>name</th> 
            <th>email</th>
            <th>password</th>
            <th>mobile</th>
            <th>avatar</th>



          </tr>
    @foreach($users as $user)
    <tr>    
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->mobile}}</td>
      <td><img src="/uploads/avatar/{{$user->avatar}}" alt="{{$user->name}}" >{{$user->avatar}}</td>




      
    </tr>

@endforeach
<table style="border:1px;">
    <tr>
        <th>id</th>
        <th>from</th> 
        <th>to</th>
        <th>message</th>
      </tr>
@foreach($smses as $sms)
<tr>    
  <td>{{$sms->id}}</td>
  



  
</tr>

@endforeach
</table>


<table style="border:1px;">
        <tr>
            <th>id</th>
            <th>sharename</th> 
            <th>shareprice</th>
            <th>shareq</th>
          </tr>
    @foreach($shares as $shr)
    <tr>    
      <td>{{$shr->id}}</td>
      <td>{!!$shr->share_name!!}</td>
      <td>{{$shr->share_price}}</td>
      <td>{{$shr->share_qty}}</td>
    
    
    
      
    </tr>
    
    @endforeach
    </table>
    




</body>



</html>