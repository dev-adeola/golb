<script setup>

</script>

<template>
    <div class="container w-full flex flex-col items-center py-5 mx-auto my-auto">
        <div
          class="grid gap-8 w-full md:grid-cols-2 grid-cols-1 lg:text-left text-center lg:grid-cols-4" 
        >
          <div class="flex w-full space-y-3 font-[Rubik] flex-col text-white">
            <h4
              class="font-bold hidden lg:block font-Rubik text-[#FFFFFF] text-[24px]"
            >
              About
            </h4>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#">Our Story</a>
            </p>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#"> Careers </a>
            </p>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#"> Patner with us </a>
            </p>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#"> Contact us</a>
            </p>
          </div>
          <div class="flex w-full space-y-3 font-[Rubik] flex-col text-white"  >
            <h4 class="font-bold font-Rubik text-[#FFFFFF] text-[24px]">
              Blog
            </h4>
            <p class="text-[#CCC] font-normal text-base" v-for="cat in $page.props.nav.main" :key="cat.id">
              <Link :href="cat.title">{{ cat.title }} </Link>
            </p>
           
          </div>
          <div class="flex w-full space-y-3 font-[Rubik] flex-col text-white">
            <h4 class="font-bold font-Rubik text-[#FFFFFF] text-[24px]">
              Platform
            </h4>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#">Infrastructure </a>
            </p>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#"> Terms and Conditions </a>
            </p>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#">Legal </a>
            </p>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#"> Fees</a>
            </p>
          </div>
          <div class="flex w-full space-y-3 font-[Rubik] flex-col text-white">
            <h4 class="font-bold font-Rubik text-[#FFFFFF] text-[24px]">
              Support
            </h4>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#">WhatsApp </a>
            </p>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#">Chat@ratefy.co</a>
            </p>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#"> Telegram Chanel </a>
            </p>
            <p class="text-[#CCC] font-normal text-base">
              <a href="#"> How-To Videos</a>
            </p>
          </div>
        </div>
        <div class="flex lg:hidden py-6 items-center space-x-6">
          <p class="text-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="50"
              height="50"
              viewBox="0 0 66 66"
              fill="none"
            >
              <!-- First SVG: Circle -->
              <circle cx="32.5854" cy="33.2476" r="32.5854" fill="#21272A" />

              <!-- Second SVG: Rectangle -->
              <foreignObject x="16" y="16" width="46" height="46">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="31"
                  height="32"
                  viewBox="0 0 31 32"
                  fill="none"
                >
                  <g clip-path="url(#clip0_5048_1038)">
                    <path
                      d="M1.22564 11.0434H7.36933V31.4632H1.22564V11.0434ZM4.29765 0.893066C6.26125 0.893066 7.85702 2.54203 7.85702 4.57448C7.85702 6.6049 6.26125 8.25386 4.29765 8.25386C2.32944 8.25386 0.738281 6.6049 0.738281 4.57448C0.738281 2.54203 2.32944 0.893066 4.29765 0.893066Z"
                      fill="#00B172"
                    />
                    <path
                      d="M11.2207 11.0432H17.1118V13.8355H17.1958C18.0157 12.2294 20.0198 10.5376 23.0069 10.5376C29.2263 10.5376 30.3743 14.7655 30.3743 20.2636V31.4631H24.2352V21.5329C24.2352 19.1642 24.1953 16.1184 21.0436 16.1184C17.8475 16.1184 17.3598 18.7001 17.3598 21.3627V31.4631H11.2207V11.0432Z"
                      fill="#00B172"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_5048_1038">
                      <rect
                        width="30"
                        height="31"
                        fill="white"
                        transform="translate(0.574219 0.695312)"
                      />
                    </clipPath>
                  </defs>
                </svg>
              </foreignObject>
            </svg>
          </p>

          <p class="text-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="50"
              height="50"
              viewBox="0 0 65 65"
              fill="none"
            >
              <!-- First SVG: Circle -->
              <circle cx="32.5854" cy="33.2476" r="32.5854" fill="#21272A" />

              <!-- Second SVG: Rectangle -->
              <foreignObject x="16" y="16" width="46" height="46">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32"
                  height="33"
                  viewBox="0 0 32 33"
                  fill="none"
                >
                  <path
                    d="M12.8824 18.1457C8.88005 12.1715 4.8858 6.20986 0.87544 0.223051C0.947887 0.215862 0.996185 0.208673 1.04448 0.208673C4.02448 0.208673 7.00286 0.208673 9.98286 0.205078C10.1052 0.205078 10.1696 0.262592 10.234 0.359646C12.7922 4.18071 15.3504 7.99997 17.9102 11.821C17.9376 11.8624 17.9665 11.9001 18.0068 11.954C18.0503 11.9073 18.0921 11.8678 18.1291 11.8228C20.2977 9.20775 22.4663 6.59268 24.6349 3.97761C25.6427 2.76264 26.6505 1.54586 27.6584 0.329092C27.7195 0.255402 27.7743 0.205078 27.8757 0.205078C28.7032 0.21047 29.5323 0.208673 30.3598 0.208673C30.3824 0.208673 30.4049 0.212267 30.4259 0.214064C30.4307 0.223051 30.4339 0.228443 30.4355 0.233835C30.4371 0.239227 30.4387 0.248213 30.4371 0.250011C26.7053 4.75764 22.9734 9.26347 19.2287 13.7873C23.4516 20.0904 27.6729 26.3899 31.9118 32.72C31.8329 32.7254 31.7798 32.7326 31.7267 32.7326C30.5192 32.7326 29.3102 32.7326 28.1027 32.7326C26.3543 32.7326 24.6059 32.7308 22.8575 32.7362C22.7094 32.7362 22.6193 32.6859 22.5307 32.5529C19.7681 28.4209 17.0022 24.2943 14.2363 20.1641C14.1961 20.103 14.1542 20.0437 14.1059 19.9718C14.0624 20.0185 14.0286 20.0509 13.998 20.0868C10.5592 24.2332 7.12039 28.3796 3.68639 32.5295C3.56082 32.6823 3.43685 32.738 3.25654 32.7344C2.51436 32.7236 1.77218 32.7308 1.02999 32.7308C0.967207 32.7308 0.904419 32.7308 0.846461 32.7308C0.840022 32.7146 0.835192 32.7074 0.835192 32.7021C0.833582 32.6967 0.833582 32.6877 0.835192 32.6859C4.84716 27.8458 8.8559 23.0056 12.8824 18.1457ZM27.9063 30.4968C27.8564 30.4141 27.8274 30.362 27.7936 30.3116C23.4049 23.7623 19.0178 17.2111 14.6291 10.6618C12.8276 7.97301 11.0261 5.28425 9.22619 2.59369C9.16179 2.49664 9.10222 2.43373 8.97665 2.43373C7.65972 2.44092 6.34279 2.43732 5.02425 2.43912C4.98239 2.43912 4.94053 2.44991 4.88097 2.45709C4.92604 2.52899 4.95824 2.58111 4.99205 2.63143C7.32002 6.10741 9.64799 9.58339 11.9776 13.0576C15.835 18.8161 19.694 24.5747 23.5482 30.335C23.6303 30.4572 23.714 30.5004 23.8476 30.4986C25.1308 30.4932 26.4123 30.495 27.6954 30.495C27.7582 30.4968 27.8178 30.4968 27.9063 30.4968Z"
                    fill="#00B172"
                  />
                </svg>
              </foreignObject>
            </svg>
          </p>
          <p class="text-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="50"
              height="50"
              viewBox="0 0 65 65"
              fill="none"
            >
              <!-- Circle Background -->
              <circle cx="32.5" cy="32.5" r="32" fill="#21272A" />

              <!-- Instagram Icon -->
              <foreignObject x="17.5" y="17.5" width="30" height="30">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  viewBox="0 0 24 24"
                  fill="#00B172"
                  stroke="#fff"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="text-white"
                >
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                  <path
                    d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                  ></path>
                  <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
                </svg>
              </foreignObject>
            </svg>
          </p>
        </div>
      </div>
</template>