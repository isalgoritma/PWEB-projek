@extends('layouts.app')

@section('content')
<style>
    .page-container {
        background: #F7F0E9;
        min-height: 100vh;
        padding-top: 60px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .profile-photo {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: #d3d3d3;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        margin-bottom: 30px;
    }

    .info-card {
        width: 450px;
        background: #F1E5D6;
        border-radius: 14px;
        padding: 15px 20px;
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        box-shadow: 0 0 4px rgba(0,0,0,0.1);
    }

    .info-label {
        font-weight: bold;
        font-size: 15px;
        margin-bottom: 3px;
    }

    .edit-btn img {
        width: 20px;
        cursor: pointer;
    }

    /* modal */
    #editModal {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.45);
        display: none;
        justify-content: center;
        align-items: center;
    }

    .modal-box {
        background: white;
        width: 350px;
        padding: 20px;
        border-radius: 12px;
    }
</style>

<div class="page-container">

    {{-- FOTO PROFIL --}}
    <div class="profile-photo">
        <img src="{{ asset('img/icon-profil.png') }}" width="70">
    </div>

    {{-- CARD 1 → USERNAME --}}
    <div class="info-card">
        <div>
            <p class="info-label">Username:</p>
            <p>{{ $user->name }}</p>
        </div>

        {{-- <button class="edit-btn" onclick="openEdit('name', '{{ $user->name }}')">
            <img src="{{ asset('img/edit-icon.png') }}">
        </button> --}}
    </div>

    {{-- CARD 2 → EMAIL --}}
    <div class="info-card">
        <div>
            <p class="info-label">Email:</p>
            <p>{{ $user->email }}</p>
        </div>

        {{-- <button class="edit-btn" onclick="openEdit('email', '{{ $user->email }}')">
            <img src="{{ asset('img/edit-icon.png') }}">
        </button> --}}
    </div>

    {{-- CARD 3 → NO HP --}}
    <div class="info-card">
        <div>
            <p class="info-label">No HP:</p>
            <p>{{ $user->nohp ?? 'Belum diisi' }}</p>
        </div>

        {{-- <button class="edit-btn" onclick="openEdit('nohp', '{{ $user->nohp }}')">
            <img src="{{ asset('img/edit-icon.png') }}">
        </button> --}}
    </div>

</div>

{{-- MODAL --}}
<div id="editModal">
    <div class="modal-box">
        <h3 id="labelEdit" class="text-xl font-bold mb-3">Edit</h3>

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf

            <input type="hidden" id="fieldName" name="field">

            <input type="text" id="fieldValue" name="value"
                class="border w-full p-2 rounded mb-4">

            <div class="flex justify-end gap-2">
                <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openEdit(field, value) {
        document.getElementById('editModal').style.display = 'flex';
        document.getElementById('fieldName').value = field;
        document.getElementById('fieldValue').value = value;

        // label modal ganti sesuai field
        document.getElementById('labelEdit').innerText =
            "Edit " + (field === 'name' ? "Username" :
                        field === 'email' ? "Email" :
                        "No HP");
    }

    function closeModal() {
        document.getElementById('editModal').style.display = 'none';
    }
</script>



@endsection
