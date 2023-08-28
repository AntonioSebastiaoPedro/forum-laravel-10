@csrf
<input type="text" name="subject" id="" placeholder="Assunto..." value="{{ $support->subject ?? old('subject') }}">
<textarea name="body" id="" cols="30" rows="10" placeholder="Descrição">{{ $support->body ?? old('body') }}</textarea>
<button type="submit">Salvar</button>