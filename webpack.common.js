const path = require("path");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CopyPlugin = require("copy-webpack-plugin");
const autoprefixer = require("autoprefixer");

module.exports = {
  entry: {
    app: "./resources/js/app.js",
    // JavaScriptを増やす場合は以下に追加
    // another: './src/js/another.js',
  },

  output: {
    path: path.resolve(__dirname, "public"),
    filename: "assets/js/[name].bundle.js",
  },

  optimization: {
    splitChunks: {
      chunks: "initial",
      cacheGroups: {
        vendor: {
          test: /node_modules/,
          name: "vendor",
        },
        vendorsModules: {
          test: /resources[\\/]js[\\/]modules/,
          name: "vendor-modules",
          minSize: 0,
          minChunks: 2,
        },
      },
    },
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader",
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              sourceMap: true,
              url: false,
            },
          },
          {
            loader: "postcss-loader",
            options: {
              postcssOptions: {
                plugins: [autoprefixer({ grid: true })],
              },
            },
          },
          {
            loader: "sass-loader",
            options: {
              implementation: require("sass"),
              sassOptions: {
                fiber: false,
              },
            },
          },
        ],
      },
      {
        test: /\.(jpe?g|gif|png|svg)$/,
        use: {
          loader: "url-loader", // this need file-loader
          options: {
            limit: 50000,
          },
        },
      },
      {
        test: /\.ttf$/,
        generator: {
          filename: ({ filename, contentHash }) => {
            const filepath = path.parse(filename);
            return `resources/fonts/${filepath.name}${filepath.ext}`;
          },
        },
      },
      {
        test: /\.html$/,
        loader: "html-loader",
      },
      {
        test: /\.pug$/,
        use: "pug-loader",
      },
      {
        test: /\.css$/,
        use: [
          "style-loader",
          {
            loader: "css-loader",
            options: {
              url: false,
            },
          },
        ],
      },
    ],
  },

  // 利用するプラグイン
  plugins: [
    // new CleanWebpackPlugin(),

    new MiniCssExtractPlugin({
      filename: "./assets/css/app.css", // Sassのコンパル先
    }),

    new CopyPlugin({
      patterns: [
        {
          from: "resources/images",
          to: "./assets/images",
        },
      ],
    }),
  ],
};
