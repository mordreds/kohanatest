<div id="main-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-white">
				<div class="panel-heading clearfix">
					<h4 class="panel-title">New Blog Post</h4>
				</div>
				<div class="panel-body">
					<form id="blogPostForm" onsubmit="return false;">
						<div class="col-md-4">
							<div class="form-group">
								<label for="blog_title">Blog Title/Heading</label>
								<input type="text" class="form-control" id="blog_title">
							</div>
							<div class="form-group">
								<label for="input_tags" class="control-label">Tags Input</label>
								<input type="text" value="Gadgets" id="input_tags" data-role="tagsinput" class="form-control">
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
						<div class="col-md-12">
							<div class="col-md-offset-5">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div><!-- Row -->
</div><!-- Main Wrapper -->