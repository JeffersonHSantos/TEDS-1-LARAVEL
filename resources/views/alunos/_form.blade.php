@csrf

<label for="nome">Nome do aluno</label>
<input
    type="text"
    id="nome"
    name="nome"
    {{-- Old mantem o que foi digitado quando ocorrer erro (Não obrigatório) --}}
    value="{{ old('nome', $aluno->nome ?? '') }}"
    required
>
<label for="cpf">CPF</label>
<input
    type="text"
    id="cpf"
    name="cpf"
    {{-- Old mantem o que foi digitado quando ocorrer erro (Não obrigatório) --}}
    value="{{ old('cpf', $aluno->cpf ?? '') }}"
    required
>
<label for="email">Email</label>
<input
    type="email"
    id="email"
    name="email"
    {{-- Old mantem o que foi digitado quando ocorrer erro (Não obrigatório) --}}
    value="{{ old('email', $aluno->email ?? '') }}"
    required
>
<label for="status">Status</label>
<select id="status" name="status" required>
    <option value="ativo" {{ old('status', $aluno->status ?? '') === 'ativo' ? 'selected' : '' }}>Ativo</option>
    <option value="inativo" {{ old('status', $aluno->status ?? '') === 'inativo' ? 'selected' : '' }}>Inativo</option>
</select>



<button type="submit" class="btn">{{ $buttonText ?? 'Salvar' }}</button>
<a href="{{ route('alunos.index') }}" style="margin-left: 8px;">Cancelar</a>