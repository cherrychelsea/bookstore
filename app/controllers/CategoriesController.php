<?php
	/**
	*  
	*/
	class CategoriesController extends BaseController
	{
		
		public function _construct() {
			$this->beforeFilter('csrf', array('on' => 'post'));
		}

		public function getIndex() {
			return View::make('categories.index')
					->with('categories', Category::all());
		}

		public function postCreate() {
			$valRules = Category::rules;
			$validator = Validator::make(Input::all(), $valRules);

			if($validator->passes()) {
				$category = new Category;
				$category->name = Input::get('name');
				$category->save();

				return Redirect::to('adamin/categories/index')
						->with('message', 'Category created successfully!');
			}
			return Redirect::to('admin/categories/index')
					->with('message', 'Something went wrong!')
					->withErrors($validator)
					->withInput();
		}

		public function postDestroy() {
			$category = Category::find(Input::get('id'));
			if($category) {
				$category->delete();
				return Redirect::to('admin/categories/index')
						->with('message', 'Category deleted successfully');
			}
			return Redirect::to('admin/categories/index')
					->with('message', 'Something got wrong, please try again!');
		}
	}
