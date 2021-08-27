<!-- Edit BlogPost Modal -->
<div class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">View Post</h4>
			</div>
			<div class="modal-body" style="margin-top: 10px">
				<form id="blogPostForm" onsubmit="ajaxSaveBlogPost('save')">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="blog_title">Blog Title/Heading</label>
								<input type="text" class="form-control" id="blog_title">
							</div>
							<div class="form-group">
								<label for="input_tags" class="control-label">Tags Input</label>
								<input type="text" value="" id="input_tags" data-role="tagsinput" class="form-control">
							</div>
							<div class="form-group">
								<label for="co_authors">Credit Authors </label>
								<input type="text" class="form-control" id="co_authors" placeholder="Co-Authors">
							</div>
							<div class="form-group">
								<label for="cover_img">Cover Image </label>
								<input type="file" class="form-control" accept="image/*" id="cover_img">
							</div>
							<div class="form-group">
								<label for="summary">Summary </label>
								<textarea rows="10" class="form-control" style="resize: none" id="summary" placeholder="Summary"></textarea>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label for="full_details">Full Details</label>
								<div id="full_details" class="summernote"></div>
							</div>
						</div>
                        <input type="hidden" id="postId">
					</div>
				</form>
			</div>
			<div class="modal-footer bg-gray">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="postSaveChangesBtn" type="submit" class="btn btn-success">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- ./Edit BlogPost Modal -->

<div class="modal fade" id="publishPostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">View Post</h4>
			</div>
			<div class="modal-body">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Delete BlogPost Modal -->
<div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">View Post</h4>
            </div>
            <div class="modal-body" style="margin-top: 20px">
                <input type="hidden" id="deletePostId">
	            Do You Want To Really Delete <?php echo "<strong><em id='deletename'></em></strong>"; ?> .... ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="deletePostbtn" type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- ./Delete BlogPost Modal -->

