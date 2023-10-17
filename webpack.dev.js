const { merge } = require("webpack-merge");
const commonConfig = require("./webpack.common.js");
const path = require("path");

module.exports = merge(commonConfig, {
  mode: "development",
  watch: true, // ファイル監視
  devtool: "eval-cheap-source-map", // デバック用ソースマップの生成

  // dev-server
  devServer: {
    open: false, // ブラウザ起動
    port: 9000,
    static: path.join(__dirname, "public"),
  },
});
