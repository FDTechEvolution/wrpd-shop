<div class="" role="alert" id="chkfrm-alert"></div>
<?= $this->Form->create('shipmentaddress', ['url'=>['controller'=>'', 'action'=>''], 'id' => 'frmchk', 'class' => 'form-horizontal', 'role' => 'form', 'onSubmit' => 'paymentfrm.chkfrmsubmit();']) ?>
<div class="row">
    <div class="col-sm-6 col-md-6">
        <div class="card" id="frm-shipment">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h4 class="card-title">ที่อยู่ในการจัดส่ง</h4>
                        <hr>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-12 col-form-label">ชื่อ - สกุล <span class="require">*</span></label>
                                <div class="col-md-9 col-sm-12">
                                    <?php echo $this->Form->control('name', ['class' => 'form-control', 'label' => false, 'id' => 'name']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-12 col-form-label">โทรศัพท์ <span class="require">*</span></label>
                                <div class="col-md-9 col-sm-12">
                                    <?php echo $this->Form->control('mobile', ['class' => 'form-control', 'label' => false, 'type' => 'number', 'id' => 'phone']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-12 col-form-label">ที่อยู่ <span class="require">*</span></label>
                                <div class="col-md-9 col-sm-12">
                                    <?php echo $this->Form->control('line1', ['class' => 'form-control', 'label' => false, 'id' => 'address']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-12 col-form-label">แขวง / ตำบล <span class="require">*</span></label>
                                <div class="col-md-9 col-sm-12">
                                    <?php echo $this->Form->control('subdistrict', ['class' => 'form-control', 'label' => false, 'id' => 'subdistrict']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-12 col-form-label">เขต / อำเภอ <span class="require">*</span></label>
                                <div class="col-md-9 col-sm-12">
                                    <?php echo $this->Form->control('district', ['class' => 'form-control', 'label' => false, 'id' => 'district']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-12 col-form-label">จังหวัด <span class="require">*</span></label>
                                <div class="col-md-9 col-sm-12">
                                    <?php echo $this->Form->control('province', ['options' => $province, 'class' => 'form-control', 'data-live-search' => 'true', 'id' => 'province-select', 'label' => false, 'id' => 'province']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-12 col-form-label">รหัสไปรษณีย์ <span class="require">*</span></label>
                                <div class="col-md-9 col-sm-12">
                                    <?php echo $this->Form->control('zipcode', ['class' => 'form-control', 'label' => false, 'type' => 'number', 'id' => 'zipcode']); ?>
                                </div>
                            </div>
                            <hr/>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-12 col-form-label">รายละเอียดอื่นๆ</label>
                                <div class="col-md-9 col-sm-12">
                                    <?php echo $this->Form->textarea('description', ['class' => 'form-control', 'label' => false]); ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
    <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h4 class="card-title">รายการสินค้า</h4>
                        <hr>
                        
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="card" id="frm-payment">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h4 class="card-title">รูปแบบการชำระเงิน</h4>
                        <hr>
                        <fieldset style="margin: 0; padding-top: 0; padding-bottom: 0;">
                            <div class="form-group row" style="margin-bottom: 0;">
                                <div class="custom-control custom-radio">
                                    <div class="col-sm-12 col-md-12">
                                        <?php echo $this->Form->radio('payment', $paymentMethod, ['class' => 'paymentmethod']); ?>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="form-group row" style="margin-bottom: 0;">
                                <div class="col-12 text-center">
                                    <?= $this->Form->button(__('<i class="mdi mdi-auto-upload"></i> ดำเนินการสั่งซื้อ'), ['class' => 'btn btn-primary waves-effect w-md waves-light m-b-5', 'escape' => false]) ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->Form->end() ?>

<style>
.custom-control label{
    display: block;
}
input[type="radio"]{
    margin-right: 0.3em;
}
.require{
    color: #dd0000;
    font-weight: bold;
}
</style>

<script>
    const paymentfrm = new Payment();
</script>