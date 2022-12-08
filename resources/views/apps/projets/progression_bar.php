<td class="align-middle text-center">
    <div class="d-flex align-items-center justify-content-center">
        <span class="me-2 text-xs font-weight-bold">{{ $p->tri }}%</span>
        <div>
            <div class="progress">
                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="{{ $p->tri }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $p->tri }}%">
                </div>
            </div>
        </div>
    </div>
</td>
