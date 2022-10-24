const editor = Jodit.make("textarea", {
    "uploader": {
        "insertImageAsBase64URI": true
    },
    hotkeys: {
        redo: 'ctrl+z',
        undo: 'ctrl+y,ctrl+shift+z',
        indent: 'ctrl+]',
        outdent: 'ctrl+[',
        bold: 'ctrl+b',
        italic: 'ctrl+i',
        removeFormat: 'ctrl+shift+m',
        insertOrderedList: 'ctrl+shift+7',
        insertUnorderedList: 'ctrl+shift+8',
        openSearchDialog: 'ctrl+f',
        openReplaceDialog: 'ctrl+r',
    },
    "minHeight": 200,
    "spellcheck": true,
    "language": "es",
    "toolbarButtonSize": "xsmall",
    "enter": "DIV",
    "toolbarSticky": false,
    "saveModeInStorage": true,
    "showCharsCounter": false,
    "showWordsCounter": false,
    "showXPathInStatusbar": false,
    "saveModeInStorage": true,
});

const sendForm = (e) => {
    console.log(e);
}