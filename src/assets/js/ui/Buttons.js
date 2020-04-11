import Button from './Button';


class Buttons {

    constructor($fileUpload) {
        this.abortButton = new Button($fileUpload, '[data-file-upload-role=abort]', '[data-file-upload-status=processing] [data-file-upload-role=file-delete]');
        this.deleteButton = new Button($fileUpload, '[data-file-upload-role=delete]', '[data-file-upload-role=file-delete]');
    }

    refreshState() {
        this.abortButton.refreshState();
        this.deleteButton.refreshState();
    }

}


export default Buttons;
