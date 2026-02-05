<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control"
           value="{{ old('name', $team->name ?? '') }}">
</div>

<div class="mb-3">
    <label>Designation</label>
    <input type="text" name="designation" class="form-control"
           value="{{ old('designation', $team->designation ?? '') }}">
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
</div>

<div class="mb-3">
    <label>Facebook</label>
    <input type="text" name="facebook" class="form-control"
           value="{{ old('facebook', $team->facebook ?? '') }}">
</div>

<div class="mb-3">
    <label>Instagram</label>
    <input type="text" name="instagram" class="form-control"
           value="{{ old('instagram', $team->instagram ?? '') }}">
</div>

<div class="mb-3">
    <label>Twitter</label>
    <input type="text" name="twitter" class="form-control"
           value="{{ old('linkedin', $team->twitter ?? '') }}">
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="1" @selected(old('status', $team->status ?? 1) == 1)>Active</option>
        <option value="0" @selected(old('status', $team->status ?? 1) == 0)>Inactive</option>
    </select>
</div>
