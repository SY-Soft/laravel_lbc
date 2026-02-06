<div class="form-group">
    <label>Name</label>
    <input type="text" name="name"
           class="form-control"
           value="{{ old('name', $user->name ?? '') }}">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email"
           class="form-control"
           value="{{ old('email', $user->email ?? '') }}">
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
</div>
