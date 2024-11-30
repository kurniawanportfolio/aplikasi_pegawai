<div class="modal fade" id="tolak_usulan_kenaikan_pangkat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Pesan
            </div>
            <div class="modal-body">
                Anda yakin ingin menolak usulan kenaikan pangkat ini?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                <a href="{{route('admin.pangkat.tolak', $usulanKenaikanPangkat->id)}}" class="btn btn-danger">Ya</a>
            </div>
        </div>
    </div>
</div>