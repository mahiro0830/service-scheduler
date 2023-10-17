const { merge } = require("webpack-merge");
const commonConfig = require("./webpack.common.js");
const TerserWebpackPlugin = require("terser-webpack-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
const ImageminMozjpeg = require("imagemin-mozjpeg");

module.exports = merge(commonConfig, {
  mode: "production",
  optimization: {
    minimizer: [
      new TerserWebpackPlugin({
        extractComments: false, // ライセンスコメント等を排除
        terserOptions: {
          compress: {
            drop_console: true, // console.logを排除
          },
        },
      }),
      new CssMinimizerPlugin(),
    ],
  },

  plugins: [
    new ImageminPlugin({
      test: /\.(jpe?g|png|gif|svg)$/i,
      pngquant: {
        quality: "65-80",
      },
      gifsicle: {
        interlaced: false,
        optimizationLevel: 1,
        colors: 256,
      },
      svgo: {},
      plugins: [
        ImageminMozjpeg({
          quality: 85,
          progressive: true,
        }),
      ],
    }),
  ],
});
