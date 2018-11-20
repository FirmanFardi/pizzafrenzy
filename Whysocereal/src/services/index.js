const message = require('./message/message.service.js');
const project = require('./project/project.service.js');
module.exports = function () {
  const app = this; // eslint-disable-line no-unused-vars
  app.configure(message);
  app.configure(project);
};
