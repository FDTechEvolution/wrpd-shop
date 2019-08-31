class Payment{
    constructor(){

    }

    chkfrmsubmit(){
        // let frmID = ['name', 'phone', 'address', 'subdistrict', 'district', 'province', 'zipcode']
        // for(let index = 0; index < frmID.length; index++){
        //     this.frmID[index] = document.getElementById("'"+frmID[index]+"'").value
        // }

        this.name = document.getElementById('name').value
        this.phone = document.getElementById('phone').value
        this.address = document.getElementById('address').value
        this.subdistrict = document.getElementById('subdistrict').value
        this.district = document.getElementById('district').value
        this.province = document.getElementById('province').value
        this.zipcode = document.getElementById('zipcode').value

        this.paymethod = document.getElementsByClassName('paymentmethod').value

        if(this.name && this.phone && this.address && this.subdistrict && this.district && this.province && this.zipcode){
            if(this.paymethod){
                return true
            }else{
                document.getElementById('frm-payment').style.borderColor = "#dd0000"
                document.getElementById('chkfrm-alert').className = "alert alert-danger"
                document.getElementById('chkfrm-alert').innerHTML = "กรุณาเลือกรูปแบบการชำระเงิน"

                return false
            }
        }else{
            document.getElementById('frm-shipment').style.borderColor = "#dd0000"
            document.getElementById('chkfrm-alert').className = "alert alert-danger"
            document.getElementById('chkfrm-alert').innerHTML = "ข้อมูลไม่ครบ!! กรุณากรอกข้อมูลในช่องที่มีเครื่องหมาย * ให้ครบถ้วน"

            return false;
        }

    }
}