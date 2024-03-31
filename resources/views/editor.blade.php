<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Global Load</title>
    <link
      href="https://unpkg.com/md-editor-v3@4.12.3/lib/style.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div id="md-editor-v3">
      <md-editor-v3 v-model="text" />
    </div>
    <script src="https://unpkg.com/vue@3.2.47/dist/vue.global.prod.js"></script>
    <script src="https://unpkg.com/md-editor-v3@4.12.3/lib/umd/index.js"></script>
    <script>
      const App = {
        data() {
          return {
            text: 'Hello Editor!!',
          };
        },
      };
      Vue.createApp(App).use(MdEditorV3.MdEditor).mount('#md-editor-v3');
      console.log(config);
    </script>
  </body>
</html>
