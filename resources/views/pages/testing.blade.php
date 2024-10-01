@php
    $user="sarfraz";
    $users=["apple","banana","mango"];
@endphp

<script>
// var user=@json($user);
// console.log(user);

// var users=@json($users);

var users={{Js::from($users)}};

users.forEach(function(entery){
    console.log(entery);
});



</script>