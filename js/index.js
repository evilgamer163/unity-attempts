document.addEventListener('DOMContentLoaded', () => {

const reg_form = document.querySelector('.reg-form'),
		auth_form = document.querySelector('.auth-form'),
		article_form = document.querySelector('.article-form'),
		message_send_form = document.querySelector('.message-send-form'),
		error_block = document.getElementById('error-block'),
		form_control_inputs = document.querySelectorAll('.form-control'),
		exit_btn = document.querySelector('.exit-btn');

const alertShow = (str) => {
	alert(str);
	form_control_inputs.forEach( item => {
		item.value = '';
	});
}

if(reg_form){
reg_form.addEventListener('submit', (e) => {
	e.preventDefault();

	let form_data = new FormData(reg_form);

	fetch('/php/reg.php', {
		method: 'POST',
		body: form_data
	})
	.then( response => {
		return response.text();
	})
	.then( data => {
		if(data != 'done') {
			error_block.textContent = data;
			error_block.style.display = 'block';
		} else {
			alertShow('Спасибо за регистрацию!');
			document.location.href = '/';
		}
	})
});
}

if(auth_form){
auth_form.addEventListener('submit', (e) => {
	e.preventDefault();

	let form_data = new FormData(auth_form);

	fetch('/php/auth.php', {
		method: 'post',
		body: form_data
	})
	.then( response => {
		return response.text();
	})
	.then( data => {
		if(data != 'done') {
			error_block.textContent = data;
			error_block.style.display = 'block';
		} else {
			error_block.style.display = 'none';
			document.location.reload();
		}
	});
});
}

exit_btn.addEventListener('click', (e) => {
	e.preventDefault();

	fetch('../php/exit_auth.php', {

	})
	.then( response => {
		return response;
	})
	.then( data => {
		document.location.reload();
	});
});

if(article_form){
article_form.addEventListener('submit', (e) => {
	e.preventDefault();

	let form_data = new FormData(article_form);

	fetch('/php/add_article.php', {
		method: 'POST',
		body: form_data
	})
	.then( response => {
		return response.text();
	})
	.then( data => {
		if(data === 'done') {
			alertShow('Статья успешно добавлена!');
			document.location.href = '/';
		}
	});
});
}

if(message_send_form){
message_send_form.addEventListener('submit', (e) => {
	e.preventDefault();

	let form_data = new FormData(message_send_form);

	fetch('../php/mail.php', {
		method: 'POST',
		body: form_data
	})
	.then( response => {
		return response.text();
	})
	.then( data => {
		if(data != 'done') {
			alert('Ooooooops! Что то пошло не так. Вы будете переадресованы на главную страницу.');
			document.location.href = "/";
		} else {
			alert('Письмо отправлено!');
		}
	});
});
}

});