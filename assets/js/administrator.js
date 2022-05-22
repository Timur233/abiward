const config = {
    baseUrl: 'http://localhost/abiward/'
};

function setData(data) {
    const formData = new FormData();

    Object.keys(data).forEach((key) => {
        formData.append(key, data[key]);
    });

    return fetch(config.baseUrl + 'api/set', {
        method: 'POST',
        body: formData
    });
}

function getData(id, table, fields) {
    return fetch(config.baseUrl + 'api/get', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            id,
            table,
            fields,
        })
    });
}

function delData(id, table) {
    return fetch(config.baseUrl + 'api/del', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            id,
            table,
        })
    });
}

function modalBuilder(button) {
    const modalBlock = document.createElement('div');
    const modalContent = document.createElement('div');
    const modalFields = document.createElement('div');
    let selectedLang = '';
    const modalData = {
        table: button.dataset.table,
        command: button.dataset.command,
        fields: button.dataset.fields,
        id: button.dataset.id ?? null,
    };

    const formatFilds = (fields) => {
        let fieldsToFormat = fields;
        if (fieldsToFormat) {
            modalData.fields = fields.split('|').map(item => {
                const fieldData = item.split('=');

                return {
                    fieldType: fieldData[0],
                    fieldName: fieldData[1],
                }
            });
        }

        return modalData.fields;
    };

    const renderFields = (data = {}) => {
        const fields = modalData.fields;

        Array.from(modalFields.childNodes).forEach(el => {
            el.remove();
        })

        Array.from(fields).forEach(field => {
            const block = document.createElement('div');
            const label = document.createElement('label');
            let element = null;

            switch (field.fieldType) {
                case 'text':
                    element = document.createElement('input');
                    element.classList = 'input';
                    element.type = 'text';
                    element.required = 'required';
                    element.value = data[field.fieldName + selectedLang] ? data[field.fieldName + selectedLang] : '';

                    label.textContent = 'Заголовок';

                    block.classList = 'form-field';
                    block.append(label, element);
                    break;
                
                case 'textarea': 
                    element = document.createElement('textarea');
                    element.classList = 'textarea tiny';
                    element.innerHTML = data[field.fieldName + selectedLang] ? data[field.fieldName + selectedLang] : '';

                    label.textContent = 'Контент';

                    block.classList = 'form-field';
                    block.append(label, element);
                    break;

                case 'image': 
                    element = document.createElement('input');
                    element.type = 'file';
                    element.classList = 'image-uploader';
                    element.setAttribute('accept', '.jpg, .jpeg, .png, .svg');

                    field.fieldValue = data[field.fieldName] ? data[field.fieldName] : '';

                    label.textContent = 'Изображение';

                    block.classList = 'form-field';
                    block.append(label, element);

                    break;

                default:
                    break;
            }

            element.dataset.fieldType = field.fieldType;

            modalFields.append(block);
            field.node = element;
            field.required = element.required ? true : false;
        });

        tinymce.init({
            selector: '.tiny',
            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
            toolbar: 'casechange bullist numlist formatpainter pageembed image table code',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            language: 'ru'
        });
    };

    const saveData = () => {
        let isCanSave = true;
        const error = document.createElement('span');
        const modalPayload = {};
        
        modalData.fields.map((field) => {
            if (field.required === true && field.node.value === '') {

                error.remove();
                error.classList = 'modal-error';
                error.textContent = 'Не заполнены обязательные поля.';
                
                isCanSave = false;

                modalContent.append(error);
                
                return false;
            }

            if (field.fieldType === 'image') {

                const { files } = field.node;
                
                modalData['file'] = files[0];

                return modalPayload[field.fieldName] = field.fieldValue; 

            } else if (field.fieldType === 'textarea') {

                return modalPayload[field.fieldName + selectedLang] = tinyMCE.activeEditor.getContent();

            } else {

                return modalPayload[field.fieldName + selectedLang] = field.node.value;

            }
        });

        if (isCanSave) {
            modalData.fields = JSON.stringify(modalPayload);

            setData({...modalData}).then(res => res.json())
                .then(res => {
                    if (res) {
                        alert('Успех');

                        document.location.reload(true);
                    }
                })
        }
    };

    const renderButtons = () => {
        const block = document.createElement('div');
        const button = document.createElement('button');
        const close = document.createElement('button');

        button.classList = 'btn btn--yellow';
        button.textContent = 'Сохранить';
        button.addEventListener('click', saveData);

        close.classList = 'btn btn--yellow btn--outline';
        close.textContent = 'Закрыть';
        close.addEventListener('click', () => {
            modalBlock.remove();
        });

        block.classList = 'buttons-block';
        block.append(button, close);

        modalContent.appendChild(block);

        return modalContent;
    };

    const renderLandSwitcher = (data) => {
        const block = document.createElement('div');
        const select = document.createElement('select');

        block.classList = 'form-field';
        block.innerHTML = `
                <label>Укажите язык</label>       
        `;

        select.classList = 'select';
        select.innerHTML = `
            <option value="">Русский</option>
            <option value="_kk">Казахский</option>
        `;
        select.addEventListener('change', () => {
            selectedLang = select.value;

            renderFields(data);
        });

        block.append(select);
        modalContent.append(block);
    };

    if (modalData.command === 'DELETE') {
        if (confirm('Удать элемент?')) {
            delData(modalData.id, modalData.table)
                .then(res => res.json())
                .then(res => {
                    if (res) {
                        alert('Успех');

                        document.location.reload(true);
                    }
                })
        }

        return;
    }

    modalBlock.classList = 'main-modal';
    modalContent.classList = 'main-moodal__content';
    
    formatFilds(modalData.fields);

    if (modalData.id && modalData.command !== 'DELETE') {
        const traslateFields = [];
        
        modalData.fields.map(field => {
            if (field.fieldType === 'text' || field.fieldType === 'textarea') {
                traslateFields.push({
                    fieldType: field.fieldType,
                    fieldName: field.fieldName + '_kk'
                })
            }

            return false;
        });
        
        getData(modalData.id, modalData.table, [...modalData.fields, ...traslateFields])
            .then(res => res.json())
            .then((res) => {
                renderLandSwitcher(res);
                renderFields(res);

                modalContent.append(modalFields);
                modalBlock.append(modalContent);
                document.body.append(modalBlock);

                tinymce.init({
                    selector: '.tiny',
                    plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                    toolbar: 'casechange bullist numlist formatpainter pageembed image table code',
                    toolbar_mode: 'floating',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                    language: 'ru'
                });

                renderButtons();
            });
    } else {
        renderFields();

        modalContent.append(modalFields);
        modalBlock.append(modalContent);
        document.body.append(modalBlock);

        tinymce.init({
            selector: '.tiny',
            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
            toolbar: 'casechange bullist numlist formatpainter pageembed image table code',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            language: 'ru'
        });
        
        renderButtons();
    }

    return false;
}

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.modal-link');

    Array.from(buttons).forEach((button) => {
        button.addEventListener('click', modalBuilder.bind(null, button));
    });
});