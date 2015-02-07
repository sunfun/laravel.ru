<?php namespace Api;

class RestrictedWordsController extends BaseController
{
	protected $modelClassName = 'LaravelRU\Core\Models\RestrictedWord';

	public function index()
	{
		return $this->response->data([
			'data' => $this->model->get(),
			'total' => $this->model->count(),
		]);
	}

	public function show($id)
	{
		return $this->response->data([
			'data' => $this->model->findOrFail($id),
		]);
	}

	public function remove($id)
	{
		$word = $this->model->findOrFail($id);

		if ( ! $word->delete())
		{
			return $this->response->error("Something went wrong when deleting word with ID {$id}");
		}

		return $this->response->message('Restricted word successfully deleted');
	}

	public function store()
	{
		$this->validate($this->request, [
			'title' => 'required|unique:restricted_words'
		]);

		$word = $this->model->newInstance();
		$word->title = trim($this->request->input('title'));
		$word->save();

		return $this->response->message('Word successfully added')->data([
			'data' => $word
		]);
	}

	public function update($id)
	{
		$word = $this->model->findOrFail($id);

		$this->validate($this->request, [
			'title' => "required|unique:restricted_words,title,{$id}"
		]);

		$word->title = trim($this->request->input('title'));
		$word->save();

		return $this->response->message('Word successfully updated')->data([
			'data' => $word
		]);
	}
}
