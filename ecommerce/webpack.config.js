const config = {
  mode: "production",
  entry : {
    app: ['./resource/assets/js/app.js'],
    costum: ['./resource/assets/js/costum.js'],
    conter: ['./resource/assets/js/counter.js'],
  },
  output: {
    path: `${__dirname}/public/assets/js/`,
    filename: "[name].js",
  },
  module : {
    rules : [{
      test : /\.js$/,
      exclude : /node_modules/
    }
  ]}
}

module.exports = config