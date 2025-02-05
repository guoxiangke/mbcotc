import { defaultTheme } from '@vuepress/theme-default'
import { defineUserConfig } from 'vuepress/cli'
import { viteBundler } from '@vuepress/bundler-vite'

export default defineUserConfig({
  lang: 'en-US',
  title: '靈修小站',
  description: '每日靈修',

  theme: defaultTheme({
    logo: 'https://www.mbcotc.org/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmbcotc_logo.fed8915b.png&w=256&q=75',
    sidebar: false,
    navbar: [
      {
        text: '首页',
        link: '/',
      },
    ],
  }),

  bundler: viteBundler(),
})
