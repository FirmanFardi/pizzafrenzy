const path = require('path');
const feathers = require('@feathersjs/feathers');
const express = require('@feathersjs/express');
const socketio = require('@feathersjs/socketio');
const Sequelize = require('sequelize');
const service = require('feathers-sequelize');

const sequelize = new Sequelize('pizza', 'root', '', {
  host: 'localhost',
  dialect: 'mysql',

  pool: {
    max: 5,
    min: 0,
    acquire: 30000,
    idle: 10000
  },

  operatorsAliases: false
});

const Users = sequelize.define('users', {

      uid: {
        type: Sequelize.STRING,
        primaryKey: true},
  urole: Sequelize.STRING,
  uname: Sequelize.STRING,
  uphone: Sequelize.STRING,
  uemail:  Sequelize.STRING,
  username: Sequelize.STRING,
  password: Sequelize.STRING,
  created: Sequelize.STRING,
  modified: Sequelize.STRING
},
{
   timestamps: false,
  underscored: true,
});


const Products = sequelize.define('products', {
  pid:  {
        type: Sequelize.STRING,
        primaryKey: true},
  pname: Sequelize.STRING,
  pprice: Sequelize.STRING,
  pdescribe: Sequelize.STRING,
  ptopping:  Sequelize.STRING

},
{
  timestamps: false,
  underscored: true,
});
const Payments = sequelize.define('payments', {
  payid:  {
        type: Sequelize.STRING,
        primaryKey: true},
  paymethod: Sequelize.STRING

},
{
  timestamps: false,
  underscored: true,
});

const Orders = sequelize.define('orders', {
  oid:  {
        type: Sequelize.STRING,
        primaryKey: true},
  payid: Sequelize.STRING,
  pid: Sequelize.STRING,
  uid: Sequelize.STRING,
  oprice:  Sequelize.STRING,
  oquantity: Sequelize.STRING,
  oaddress: Sequelize.STRING,
  ocrust: Sequelize.STRING
},
{
  timestamps: false,
  underscored: true,
});

// Create an Express compatible Feathers application instance.
const app = express(feathers());

// Turn on JSON parser for REST services
app.use(express.json());
// Turn on URL-encoded parser for REST services
app.use(express.urlencoded({ extended: true }));
// Enable REST services
app.configure(express.rest());
// Enable Socket.io services
app.configure(socketio());

app.use(express.errorHandler());

const myUsers = {


  find(params) {
    let users = Users.findAll({
      where: {
        
      }
    });
    
    return Promise.resolve(users);
  },
  get(id, params) {
    let user = Users.findOne({
      where: {
        id: id
      }
    });
    
    return Promise.resolve(user);
  },
  create(data, params) {},
  update(id,params) {},
  patch(id, params) {},
  remove(id, params) {},
  setup(app, path) {}
}

const myProducts = {
  find(params) {
    let products = Products.findAll({
      where: {
        
      }
    });
    
    return Promise.resolve(products);
  },
  get(id, params) {
    let product = Products.findOne({
      where: {
        id: id
      }
    });
    
    return Promise.resolve(product);
  },
  create(data, params) {},
  update(id, params) {},
  patch(id, params) {},
  remove(id, params) {},
  setup(app, path) {}
}

const myPayments = {
  find(params) {
    let payments = Payments.findAll({
      where: {
        
      }
    });
    
    return Promise.resolve(payments);
  },
  get(id, params) {
    let payment = Payments.findOne({
      where: {
        id: id
      }
    });
    
    return Promise.resolve(payment);
  },
  create(data, params) {},
  update(id, params) {},
  patch(id, params) {},
  remove(id, params) {},
  setup(app, path) {}
}

const myOrders = {
  find(params) {
    let orders = Orders.findAll({
      where: {
        
      }
    });
    
    return Promise.resolve(orders);
  },
  get(id, params) {
    let order = Orders.findOne({
      where: {
        id: oid
      }
    });
    
    return Promise.resolve(order);
  },
  create(data, params) {},
  update(id,params) {},
  patch(id,params) {},
  remove(id, params) {},
  setup(app, path) {}
}

app.use('/users', myUsers);
app.use('/products', myProducts);
app.use('/payments', myPayments);
app.use('/orders', myOrders);



// Start the server
const port = 3030;

app.listen(port, () => {
  console.log(`Feathers server listening on port ${port}`);
});

//display name of table that in database mysql
sequelize.getQueryInterface().showAllSchemas().then((tableObj) => {
    console.log('// Tables in database','==========================');
    console.log(tableObj);
})
.catch((err) => {
    console.log('showAllSchemas ERROR',err);
})