<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
@if($errors->any())
    <h4>{{$errors->first()}}</h4>
@endif
<form action="/admin/robowars/betting/bet/result" method="post">
    @csrf
    <input type="text" name="bot" placeholder="winning bot id" required>
    <input type="submit">
</form>
<div style="padding: 10px"></div>
<form action="/admin/robowars/betting/status" method="post">
    @csrf
    <input type="hidden" name="status" value="1">
    <input type="submit" value="Start betting">
</form>
<form action="/admin/robowars/betting/status" method="post">
    @csrf
    <input type="hidden" name="status" value="0">
    <input type="submit" value="End Betting">
</form>
</body>