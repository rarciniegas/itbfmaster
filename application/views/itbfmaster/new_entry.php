<?php echo validation_errors(); ?>

<?php echo form_open('itbfmaster/new_entry'); ?>
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2>New Reference #</h2>
      <p>Please fill out this form to create a new entry</p>

      <div class="row">
        <div class="col-md-3 mb-3 form-group">
          <label>Reference #</label>
          <input type="text" class="form-control" name="reference" placeholder="reference">
        </div>
        <div class="col-md-3 mb-3 form-group">
          <label>Importer:</label>
          <input type="text" class="form-control" name="importer" placeholder="importer">
        </div>
        <div class="col-md-2 mb-3 form-group">
          <label>PO #</label>
          <input type="text" class="form-control" name="po" placeholder="PO">
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="isf">
          <label class="custom-control-label" for="isf">ISF</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 mb-3 form-group">
          <label>CHK By:</label>
          <input type="text" class="form-control" name="check_by" placeholder="chk by">
        </div>
        
        <div class="col-md-4 mb-3 form-group">
          <label>Arrival date</label>
          <input type="date" class="form-control" name="arrival_date" placeholder="date">
        </div>
        
      </div>

      <div class="row">
        <div class="col-md-4 mb-3 form-group">
          <label>Docs received</label>
          <input type="date" class="form-control" name="docs_received" placeholder="date">
        </div>
        <div class="col-md-3 mb-3 form-group">
          <label>SCAC:</label>
          <input type="text" class="form-control" name="reference" placeholder="SCAC">
        </div>
        <div class="col-md-2 mb-3 form-group">
          <label>Type</label>
          <input type="text" class="form-control" name="reference" placeholder="Type">
        </div>
        <div class="col-md-3 mb-3 form-group">
          <label>Container</label>
          <input type="text" class="form-control" name="reference" placeholder="Container">
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 mb-3 form-group">
          <label>Arrival port</label>
          <input type="text" class="form-control" name="port" placeholder="port">
        </div>
        <div class="col-md-3 mb-3 form-group">
          <label>Firm code</label>
          <input type="text" class="form-control" name="code" placeholder="code">
        </div>
        <div class="col-md-2 mb-3 form-group">
          <label>IT port</label>
          <input type="text" class="form-control" name="reference" placeholder="port">
        </div>
      </div>

      <h2>Documents</h2>
      <div class="row">
        <div class="col-md-4 mb-3 form-group">
          <label>Arrival notice</label>
          <input type="date" class="form-control" name="arrival_date" placeholder="date">
        </div>
        <div class="col-md-4 mb-3 form-group">
          <label>PGA</label>
          <input type="date" class="form-control" name="pga_date" placeholder="date">
        </div>
        <div class="col-md-4 mb-3 form-group">
          <label>TSCA</label>
          <input type="date" class="form-control" name="tsca_date" placeholder="date">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3 form-group">
          <label>Other</label>
          <input type="date" class="form-control" name="other_date" placeholder="date">
        </div>
        <div class="col-md-4 mb-3 form-group">
          <label>Invoice</label>
          <input type="date" class="form-control" name="invoice_date" placeholder="date">
        </div>
        <div class="col-md-4 mb-3 form-group">
          <label>Packing list</label>
          <input type="date" class="form-control" name="packing_list_date" placeholder="date">
        </div>
      </div>

      <div class="row">

        
        <div class="col-md-4 mb-3 form-group">
          <label>B/L</label>
          <input type="date" class="form-control" name="bl_date" placeholder="date">
        </div>
        <div class="col-md-4 mb-3 form-group">
          <label>Cert. of origin</label>
          <input type="date" class="form-control" name="origin_date" placeholder="date">
        </div>
      </div>

      <h2>BILL AND GIVE BACK</h2>
      <div class="row">
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="isf">
          <label class="custom-control-label" for="isf">ISF</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="isf_bond">
          <label class="custom-control-label" for="isf_bond">ISF Bond</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="se_bond">
          <label class="custom-control-label" for="se_bond">SE Bond</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="intensive">
          <label class="custom-control-label" for="intensive">Intensive</label>
        </div>
      </div>

      <div class="row">
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="isf">
          <label class="custom-control-label" for="isf">PGA</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="isf_bond">
          <label class="custom-control-label" for="isf_bond">TSCA</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="se_bond">
          <label class="custom-control-label" for="se_bond">Courier</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="intensive">
          <label class="custom-control-label" for="intensive">Messanger</label>
        </div>
      </div>

      <div class="row">
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="isf">
          <label class="custom-control-label" for="isf">FDA</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="isf_bond">
          <label class="custom-control-label" for="isf_bond">FDA PN</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="se_bond">
          <label class="custom-control-label" for="se_bond">SEC Fee</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="intensive">
          <label class="custom-control-label" for="intensive">Other</label>
        </div>
      </div>

      <div class="row">
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="isf">
          <label class="custom-control-label" for="isf">FDA Lines</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="isf_bond">
          <label class="custom-control-label" for="isf_bond">HTS Lines</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="se_bond">
          <label class="custom-control-label" for="se_bond">Delivery</label>
        </div>
        <div class="custom-control custom-checkbox col-md-3 mb-3">
          <input type="checkbox" class="custom-control-input" id="intensive">
          <label class="custom-control-label" for="intensive">Other</label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="submit" value="Input" class="btn btn-success btn-block">
        </div>
        <div class="col">
          <a href="<?php echo base_url(); ?>home" class="btn btn-light btn-block">Cancel</a>
        </div>
      </div>

    </div>
  </div>
<?php echo form_close(); ?>
