<div class="row-fluid ">
    <div class="box span12">
        <div class="box-header well" data-original-title >
            <h2><i class="icon-list-alt"></i> Create Phone Number </h2>

        </div>

        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" name="frmPageManagement" action="" method="post">
                <fieldset>

		    <?php include 'messages.php'; ?>

                    <div class="control-group" >
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            <input  class="input-xlarge" name="fields[name]" id="name" type="text" value="<?php print _e($_REQUEST['fields']['name']) ?>" required maxlength="20"/>
                        </div>
                    </div>
		    
		    <div class="control-group" >
                        <label class="control-label" for="phone">Phone Number</label>
                        <div class="controls">
                            <input  class="input-xlarge bfh-phone" data-country="US" name="fields[phone]" id="phone" type="text" value="<?php print _e($_REQUEST['fields']['phone']) ?>" required maxlength="20"/>
                        </div>
                    </div>
		    
		    <div class="control-group" >
                        <label class="control-label" for="notes">Note</label>
                        <div class="controls">
                            <textarea class="input-xlarge" name="fields[notes]" id="notes" required><?php print _e($_REQUEST['fields']['notes']) ?></textarea>
                        </div>
                    </div>
		    
		    

                    <div class="clearfix"></div>

                    <div class="form-actions">
                        <input type="hidden" name="fields[phone_id]" id="phone_id" value="<?php print _e($_REQUEST['fields']['phone_id']) ?>" />
                        <button type="submit" class="btn btn-primary" id="submitPage">Save</button>
                        <button type="submit" class="btn btn-primary display-none" id="editPage">Edit</button>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php if (isset($_SESSION['user']['user_type']) && $_SESSION['user']['user_type'] == 'admin') { ?>
    <div class="row-fluid ">
        <div class="box span12">
    	<div class="box-header well" data-original-title >
    	    <h2><i class="icon-list-alt"></i> List of Phone Number</h2>
    	</div>
    	<div class="box-content">

    	    <fieldset>
		    <?php if (!empty($phone_books)): ?>
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			    <thead>
				<tr>
				    <th style="width:18%;text-align:center;">Name</th>
				    <th style="width:18%;text-align:center;">Phone</th>
				    <th style="width:18%;text-align:center;">Note</th>
				    <th style="width:15%;text-align:center;">Created At</th>
				    <th style="width:15%;text-align:center;">Updated At</th>
				    <th style="width:12%;text-align:center;">Action</th>
				</tr>
			    </thead>
			    <tbody >

				<?php foreach ($phone_books as $each_phone): ?>
	    			<tr id="phone_<?php print $each_phone['id'] ?>">
	    			    <td >
					    <?php print $each_phone['name']; ?>
	    			    </td>
				    <td >
					    <?php print $each_phone['phone']; ?>
	    			    </td>
				    <td>
					    <?php print $each_phone['notes']; ?>
	    			    </td>
	    			    <td style="text-align:center;">
					    <?php print _normalDate($each_phone['created_at']); ?>
	    			    </td>
	    			    <td style="text-align:center;">
					    <?php print _normalDate($each_phone['modified_at']); ?>
	    			    </td>
	    			    <td style="text-align:center;">
	    				<i onclick="doUpdatePhone('<?php print $each_phone['id'] ?>')" data-rel="tooltip" title="Click to Edit" class="icon-edit pointer"></i>
	    				<i data-rel="tooltip" onclick="doDeletePhone('<?php print $each_phone['id'] ?>')" title="Click to Delete"  class="icon-trash pointer "></i>
	    			    </td>
	    			</tr>
				<?php endforeach; ?>
			    <?php else: ?>
				<tr>
				    <td colspan="7">
					<?php $error = "No phone number exists!"; ?>
					<?php include "messages.php"; ?>
				    </td>
				</tr>

			    </tbody>
			</table>
		    <?php endif; ?>
    	    </fieldset>
    	</div>
        </div>
    </div>
<?php } ?>