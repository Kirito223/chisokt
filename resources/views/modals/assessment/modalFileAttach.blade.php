<!-- Modal -->
<div class="modal fade" id="modelAssessmentFileAttach" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Danh sách báo cáo đính kèm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-xl-12 col-xs-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tệp đính kèm</th>
                                        <th>Phân loại</th>
                                        <th>Ngày gửi</th>
                                        <th>Người gửi</th>
                                        <th>Ghi chú</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div id="pagination-file-attach" class="pagination-box">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>

            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
</script>